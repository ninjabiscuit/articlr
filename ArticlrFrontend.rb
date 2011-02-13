require 'sinatra'
require 'json'
require 'open-uri'

class ArticlrFrontend < Sinatra::Base
    set :root, File.dirname(__FILE__)
    set :public, File.dirname(__FILE__)
    get '/' do
        File.read('index.html')
    end

   get '/context' do
       puts "this is an XHR request!" if request.xhr?
       latitude = params[:latitude]
       longitude = params[:longitude]
       keywords = params[:keywords]
       latitude = 0 if(latitude.nil?)
       longitude = 0 if(longitude.nil?)

       results = ""
       open("http://articlr-backend.heroku.com/context?latitude=#{latitude}&longitude=#{longitude}&keywords=#{keywords}") do |req|
           req.each do |data|
               results << data
           end
       end
       results
   end
end
