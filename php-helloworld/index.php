<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";
print "A change is a coming! -Umer \n";
?>
    1  lab-configure 
    2  ll
    3  git clone https://github.com/omarhd66/DO180-apps
    4  ll
    5  cd DO180-apps/
    6  ll
    7  git status
    8  git push --set-upstream origin testbranch
    9  git checkout -b testbranch
   10  git push --set-upstream origin testbranch
   11  cd
   12  lab openshift-s2i start
   13  cd DO180-apps/
   14  git checkout master
   15  git checkout -b s2i
   16  git push --set-upstream origin s2i
   17  cat php-helloworld/index.php 
   18  source /usr/local/etc/ocp4.config 
   19  oc login -u ${RHT_OCP4_DEV_USER} -p ${RHT_OCP4_DEV_PASSWORD} ${RHT_OCP$_DEV_API}
   20  oc login -u ${RHT_OCP4_DEV_USER} -p ${RHT_OCP4_DEV_PASSWORD} ${RHT_OCP_DEV_API}
   21  oc get all
   22  oc get pods
   23  oc ${RHT_OCP4_DEV_USER}-s2i
   24  oc new-project  ${RHT_OCP4_DEV_USER}-s2i
   25  oc get pods
   26  ll
   27  cat README.md 
   28  cat example/README.md 
   29  oc new-app php:7.6 --name=php-helloworld https://github.com/omarhd66/DO180-apps#s2i   context-dir php-helloworld
   30  oc new-app php:7.3 --name=php-helloworld https://github.com/omarhd66/DO180-apps#s2i   context-dir php-helloworld
   31  oc new-app php:7.3 --name=php-helloworld https://github.com/omarhd66/DO180-apps#s2i   context-dir php-helloworld/
   32  oc new-app php:7.3 --name=php-helloworld https://github.com/omarhd66/DO180-apps#s2i   --context-dir php-helloworld/
   33  ll
   34  oc logs -f buildconfig/php-helloworld
   35  oc get is
   36  oc get pods
   37  oc logs --all-containers -f php-helloworld-build
   38  oc logs --all-containers -f php-helloworld
   39  oc logs --all-containers -f php-helloworld-1-build 
   40  oc get all
   41  oc describe deployment.apps/php-helloworld 
   42  oc expose route -o jsonpath='{..spec.host}{"\n"}
'
   43  oc expose route -o jsonpath='{..spec.host}{"\n"}'
   44  oc get route -o jsonpath='{..spec.host}{"\n"}'
   45  oc expose service php-helloworld 
   46  oc get route -o jsonpath='{..spec.host}{"\n"}'
   47  curl -s php-helloworld-eppsvz-s2i.apps.eu46a.prod.ole.redhat.com
   48  vi php-helloworld/index.php 
   49  git status 
   50  git add .
   51  git status 
   52  git commit -m 'Change index page contents' 
   53  git push origin s2i
   54  oc start-build php-helloworld 
   55  oc logs php-helloworld-2-build 
   56  oc logs php-helloworld-2-build -f
   57  curl -s php-helloworld-eppsvz-s2i.apps.eu46a.prod.ole.redhat.com
   58  oc get route -o jsonpath='{..spec.host}{"\n"}'
   59  curl -s php-helloworld-eppsvz-s2i.apps.eu46a.prod.ole.redhat.com
   60  oc get pods
   61  oc get all
   62  curl -s php-helloworld-eppsvz-s2i.apps.eu46a.prod.ole.redhat.com
   63  vi php-helloworld/index.php 
   64  git add .
   65  git status
   66  git commit -m systax correction' 
'
   67  git commit -m systax correction
   68  git commit -m 'systax correction'
   69  git status
   70  oc start-build php-helloworld 
   71  oc logs php-helloworld-3-build 
   72  oc get pods
   73  oc logs php-helloworld-3-build -f
   74  curl -s php-helloworld-eppsvz-s2i.apps.eu46a.prod.ole.redhat.com
   75  vi php-helloworld/index.php 
   76  git push origin s2i
   77  oc start-build php-helloworld 
   78  oc logs php-helloworld-4-build -f
   79  oc get pods
   80  oc logs php-helloworld-4-build -f
   81  curl -s php-helloworld-eppsvz-s2i.apps.eu46a.prod.ole.redhat.com
   82  oc get pods
   83  git status
   84  oc start-build php-helloworld 
   85  oc logs php-helloworld-5-build 
   86  oc logs php-helloworld-5-build  -F
   87  oc logs php-helloworld-5-build  -f
   88  cat php-helloworld/index.php 
   89  curl -s php-helloworld-eppsvz-s2i.apps.eu46a.prod.ole.redhat.com
   90  history 
   91  history > php-helloworld/history.html
   92  git status 
   93  git add .
   94  git commit -m 'upload history' 
   95  git push origin s2i
   96  history >> php-helloworld/index.php 
