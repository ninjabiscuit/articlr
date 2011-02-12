require 'sinatra'
require 'json'
require_relative '../lib/ContextEngine.rb'

class ArticlrBackend < Sinatra::Base
    get '/' do
        puts "print"
    end

   get '/context' do
       context_engine = ContextEngine.new
       puts "Request made: -"
       puts "Latitude => #{params[:latitude]}"
       puts "Longitude => #{params[:longitude]}"
       puts "Keywords -> #{params[:keywords]}"

       context_engine.setup_profile( { :latitude => params[:latitude].to_f, :longitude => params[:longitude].to_f }, params[:keywords])
       context_engine.get_context.to_json
   end
end
