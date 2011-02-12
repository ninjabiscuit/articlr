require_relative './ContextProfile.rb'
require_relative './TwitterEngine.rb'
class ContextEngine
    attr_accessor :context_profile

    def setup_profile(location, keywords)
        @context_profile = ContextProfile.new(location, keywords)
    end

    def get_context
        raise ArgumentError, "You must setup a context profile!" if @context_profile.nil?
        puts "Getting twitter information for #{@context_profile}"
        tweets = get_twitter_stream
        { :context => tweets }
    end

    def get_twitter_stream
        twitter = TwitterEngine.new
        tweets = twitter.search_near_me(@context_profile.location[:latitude], @context_profile.location[:longitude], (5.to_s << "mi"), @keywords)
        { :tweets => tweets}
    end
end
