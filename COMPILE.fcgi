I got fcgi from http://dl.fedoraproject.org/pub/epel/6/SRPMS/

Note that I have modified this RPM file to build without needing C++
support.

How to compile FCGI:

* Make sure to have ExtUtils::MakeMaker.  As root:

	yum -y install perl-ExtUtils-MakeMaker

The rest can be done *without* being root (being user):

* rpm -i fcgi-2.4.0-10.el6.src.rpm

* cd ~/rpmbuild/SPECS/

* rpmbuild -ba fcgi.spec

* Have a cup of coffee while fcgi compiles
