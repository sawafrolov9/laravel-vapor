# Requirements for Redis

> Redis Installation

[https://redis.io/docs/getting-started/installation](https://redis.io/docs/getting-started/installation)

> Install php extension on Ubuntu
```
sudo apt install php-redis
```

> Install php extension MacOsx
```
brew install php-redis
```

# Requirements for Vapor Deployment to AWS

> Staging Deployment
```
php ./vendor/bin/vapor deploy staging
```

> Production Deployment
```
php ./vendor/bin/vapor deploy production
```

# Vapor Environments Setup
> Environment Pull
```
php ./vendor/bin/vapor env:pull staging
```

> update environment in `.env.staging`
```
QUEUE_CONNECTION=redis
REDIS_CLIENT=predis
REDIS_HOST=redis_host
REDIS_PASSWORD=redis_password
REDIS_PORT=redis_port

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_name@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

> Environment Push
```
php ./vendor/bin/vapor env:push staging
```
