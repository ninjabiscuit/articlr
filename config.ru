require File.dirname(__FILE__) + "/ArticlrFrontend"
set :root, File.expand_path(File.dirname(__FILE__) + '/')
set :app_file, File.expand_path(File.dirname(__FILE__) + '/ArticlrFrontend.rb')
set :env,     :production
disable :run, :reload
run ArticlrFrontend

