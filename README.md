# Laravel Blade Formatter Package

该扩展包将 [blade-formatter](https://github.com/shufo/blade-formatter) Node.js 工具封装为 Laravel 包，并提供 `blade:format` Artisan 命令以格式化 Blade 模板。

## 安装

```bash
composer require xmultibyte/blade-formatter
```

## 使用

```bash
php artisan blade:format resources/views/**/*.blade.php --write
```

更多命令参数请查看 `php artisan blade:format --help`。

## 测试

```bash
composer install
composer test
```
