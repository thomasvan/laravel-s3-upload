# GUIDELINES

## Reference: http://david.logdown.com/posts/1437335/granting-amazon-s3-permission-by-bucket

## Laravel Setting up

```bash
composer create-project laravel/laravel laravel-s3-upload
```

```dotenv
AWS_ACCESS_KEY_ID=AKIA2QVXRWNMYVPVKKEJ
AWS_SECRET_ACCESS_KEY=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
AWS_DEFAULT_REGION=ap-southeast-1
AWS_BUCKET=staging-tgt-s3
```

```bash
php artisan make:model Image --migrate
composer require laravel/ui
php artisan ui vue --auth
php artisan migrate
```

```bash
npm install 
npm run dev
```

```bash
composer require league/flysystem
```
