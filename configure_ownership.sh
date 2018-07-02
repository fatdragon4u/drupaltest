#!/bin/bash
if [[ $UID != 0 ]]; then
	echo "please run this script with sudo:"
	echo "sudo $0 $*"
	exit 1
fi
this_dir=$(cd "$(dirname "${BASH_SOURCE[0]}")" ; pwd -P )
chown -R root:devs $this_dir
config_dir="$this_dir/config"
if [ ! -d $config_dir ]; then
	mkdir $config_dir
fi
chown -R www-data:www-data $config_dir
chown -R www-data:www-data "$this_dir/web/sites/default/files"
find $this_dir -type d -exec chmod g+s {} \;
echo Done!
exit 0

