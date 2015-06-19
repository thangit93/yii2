#
# Cookbook Name:: php54
# Recipe:: default
#
# Copyright 2015, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

%w(php54 php54-mbstring php54-gd php54-mcrypt php54-mysqlnd php54-pear php54-pecl-xdebug).each do |package|
  yum_package package do
    action :install
  end
end

