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

* cd ~/rpmbuild/RPMS

* There will be a directory for the architecture of the CPU used to compile
  fcgi, such as i386, i686, or x86_64.  Enter that directory

* rpm -i fcgi-2.4.0-10.el6.*.rpm

* rpm -i fcgi-devel-2.4.0-10.el6.*.rpm

The procedure for compiling and installing spawn-fcgi-1.6.3-1.el6.src.rpm
is similar.

