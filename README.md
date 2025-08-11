# Laravel Package Template

这是一个 Laravel 扩展包模板，包含基础目录结构、composer.json 配置、ServiceProvider 示例以及 PHPUnit + Orchestra Testbench 测试支持。

## 安装

```bash
composer require vendor/package-name
```

## 开发

- 修改 `composer.json` 中的 `vendor/package-name`、命名空间及作者信息
- 在 `src/` 下编写扩展包代码
- 在 `tests/` 下添加测试用例

## 测试

```bash
composer install
vendor/bin/phpunit
```
