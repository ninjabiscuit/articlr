require 'sinatra'
require 'json'

class ArticlrBackend < Sinatra::Base
    get '/' do
        puts "print"
    end
   get '/tweets/:keywords' do
       puts "Reached item"
       results = { :tweet_msg => params[:keywords] }.to_json
   end

end
