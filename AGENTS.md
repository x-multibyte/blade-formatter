# AGENTS.md

## 1. 包描述

本仓库为 **Laravel 扩展包模板**，支持 Laravel **10 / 11 / 12**，基于 **Orchestra Testbench** 自动测试。  
目标是为 Laravel 项目提供可复用的组件、服务或工具，遵循 Laravel 最佳实践与团队命名规范。

---

## 2. 文件与目录结构约定

（AI 必须严格遵循以下目录布局）

```
config/                 # 配置文件
database/migrations/    # 数据库迁移文件
resources/
    assets/             # 静态资源 (css/js/images)
    lang/en/            # 语言包
    views/              # Blade 模板
src/
    Console/Commands/   # Artisan 命令
    Contracts/          # 接口定义
    Events/             # 事件
    Facades/            # Laravel Facade
    Http/
        Controllers/    # 控制器
        Middleware/     # 中间件
        Requests/       # 表单请求验证
    Listeners/          # 事件监听器
    Models/             # Eloquent 模型
    Providers/          # Laravel Service Provider
    helpers.php         # 助手函数
    Package.php         # 核心类
tests/
    Feature/            # 功能测试
    Unit/               # 单元测试
```

---

## 3. 开发与测试流程

（Codex 在执行任务时必须遵循此流程）

1. **安装依赖**

```bash
composer install
```

2. **运行测试**

```bash
composer test
```

3. **新增功能**
    - 必须添加 **PHPUnit 测试用例**（`tests/Feature` 或 `tests/Unit`）
    - 必须保证 `composer test` 全部通过
4. **数据库相关变更**
    - 创建迁移文件放在 `database/migrations`
    - 更新测试数据和断言
5. **提交前检查**
    - 确认 `php artisan vendor:publish` 可正常发布资源
    - 不得硬编码敏感信息

---

## 4. 代码规范与命名规则

（Codex 必须严格遵循以下命名标准）

- 遵循 **PSR-12**
- **UpperCamelCase / PascalCase**：`class`、`trait`、`interface`、`enum`、`enum case`
- **lowerCamelCase**：类属性、方法名、方法内部变量
- **snake_case**：全局函数名、部分变量（如数组键）
- **lowercase**：`true`、`false`、`null`、`public`、`private`、`protected`、`final`、`const`
- **UPPERCASE**：类常量、全局常量
- **Controller**
    - PascalCase
    - 单数形式
    - 必须以 `Controller` 结尾
    - ✅ `UserController`
    - ❌ `UsersController`
- **Resource / Request / Model**：PascalCase、单数形式
- **关联模型**：单向关联模型放在父模型目录下（如 `App/Models/User/Profile`）
- **Event / Listener / Command**：PascalCase，无需强制加后缀
- **Traits**：用形容词（如 `Notifiable`、`Dispatchable`）

---

## 5. 验证规范（AI 必须执行）

- 修改代码后，运行 `composer test` 并确保通过
- 涉及数据库的功能必须在测试中验证
- 发布功能（config/views/lang/migrations/assets）必须能被 `vendor:publish` 正常使用
- 所有新增代码必须有 **PHPDoc 注释**

---

## 6. 常见 AI 任务（Codex 优先使用以下模式）

- 创建 Service Provider
- 创建 Facade
- 添加 Artisan 命令
- 添加事件与监听器
- 添加配置文件并支持 vendor:publish
- 添加 Blade 视图并支持 vendor:publish
- 添加语言包并支持 vendor:publish
- 添加静态资源 vendor:publish
- 添加迁移文件并更新测试
- 新增功能时同时补充 PHPUnit 测试

---

## 7. 贡献建议

- 新功能请走分支开发，合并前需跑完整测试
- 文档更新同步到 `README.md`
- 若涉及 Laravel 多版本兼容，请在 CI 覆盖不同版本测试
- 破坏性变更需在 `CHANGELOG.md` 标明迁移步骤

---

## 8. 注意事项

- 不要在包代码中硬编码敏感信息
- 所有与 Laravel 应用交互的入口必须通过 ServiceProvider
- 发布到 Composer 前确保包可在干净的 Laravel 安装中运行

---

## 9. 目标受众

- Laravel 扩展包开发者
- AI 辅助开发（如 ChatGPT Codex）  
