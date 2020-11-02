## Setup

```bash
# Install dependencies
$ composer install

# Generate Vagrantfile and Homestead.yaml
# Windows
$ vendor\\bin\\homestead make
# Mac/Linux
$ php vendor/bin/homestead make

# Add IP and URL found in homestead.yaml to your hosts file (change these if you want)

# Rename .env.example to .env
$ mv .env.example .env

# Start Virtual Machine
$ vagrant up

# SSH into VM
$ vagrant ssh

# Change to code directory
$ cd code

# Generate application key
$ php artisan key:generate

# Run database migrations
$ php artisan migrate
```

The blog can then be accessed locally at the URL specified in the Homestead.yaml file.