require 'json'
class ContextProfile
    attr_accessor :location, :keywords

    def initialize(location, keywords)
        @keywords = []
        keywords.split(",").each do |word|
            self.add_keyword(word)
        end
        @location = location
    end

    def add_keyword(word)
        @keywords << word
    end

    def remove_keyword(word)
        @keywords.delete
    end
end

