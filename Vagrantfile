Vagrant.configure(2) do |config|
  	config.vm.box = "ubuntu/trusty64"
	config.vm.provision :shell, path: "bootstrap.sh"
	config.vm.network :forwarded_port, guest: 80, host: 8080
	config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
end