name 'yum-ius'
maintainer 'Chef'
maintainer_email 'Sean OMeara <someara@getchef.com>'
license 'Apache 2.0'
description 'Installs/Configures yum-ius'
long_description IO.read(File.join(File.dirname(__FILE__), 'README.md'))
version '0.4.0'

depends 'yum', '~> 3.0'
depends 'yum-epel'
