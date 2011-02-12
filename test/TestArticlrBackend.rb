require 'sinatra'

class TestArticlrBackend < Sinatra::Base
    set :json, " "

    configure do
        File.open(File.expand_path(File.dirname(__FILE__) + '/test_json_data.txt'), 'r') do |file|
            while line = file.gets
                puts line
                settings.json += line
            end
        end
    end

    get '/' do
        puts "hello"
        puts settings.json
        settings.json
    end
end

TestArticlrBackend.run!
