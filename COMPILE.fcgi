I got fcgi from http://dl.fedoraproject.org/pub/epel/6/SRPMS/

Note that I have modified this RPM file to build without needing C++
support.

To install the official EPEL binary with Yum, as root:

rpm -ivh \
	http://dl.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
yum install fcgi-devel

To avoid adding all of EPEL to one's CentOS systems, one can compile
FCGI thusly:

* Make sure to have ExtUtils::MakeMaker.  As root:

	yum -y install perl-ExtUtils-MakeMaker

The rest can be done *without* being root (being user):

* rpm -i fcgi-2.4.0-10.el6.src.rpm

* cd ~/rpmbuild/SPECS/

* rpmbuild -ba fcgi.spec

* Have a cup of coffee while fcgi compiles
