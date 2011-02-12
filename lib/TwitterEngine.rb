require 'twitter'
require_relative './Tweet.rb'

class TwitterEngine
    def search_near_me(lat, long, rad, word)
        search = Twitter::Search.new
        tweets = search.containing(word).geocode(lat,long, (rad.to_s << "mi")).fetch
        results = []
        tweets.each do |tweet|
            results.push(Tweet.new(tweet.id,
                              tweet.from_user,
                              tweet.location,
                              tweet.text,
                              tweet.created_at,
                              tweet.photo).to_json)
        end
        results
    end
end
