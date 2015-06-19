#
# Cookbook Name:: fukuriko
# Recipe:: default
#
# Copyright 2015, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

service "iptables" do
  action [:stop, :disable]
end

service "httpd" do
  supports :status => true, :restart => true, :reload => true
  action [:enable, :start]
end

template "/etc/httpd/conf-enabled/yii2.conf" do
  source "web_app.conf.erb"
  mode "0644"
  notifies :restart, "service[httpd]"
end

service "mysqld" do
    action [ :enable, :start ]
end

# create the databases
node[:db].each do |name|
    execute "create database #{name}" do
        #command "mysql -uvagrant -p#{node[:mysql][:server_root_password]} -e 'create database if not exists #{name}'"
        command "mysql -uroot -p#{node[:mysql][:server_root_password]} -e 'create database if not exists #{name} character set utf8 collate utf8_general_ci'"
        user "vagrant"
    end
end

