# 命令模式

命令模式（Command）将请求封装成对象，从而使你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。这么说很抽象，我们举个例子：

假设我们有一个调用者类 Invoker 和一个接收调用请求的类 Receiver，在两者之间我们使用命令类 Command 的 execute 方法来托管请求调用方法，这样，调用者 Invoker 只知道调用命令类的 execute 方法来处理客户端请求，从而实现接收者 Receiver 与调用者 Invoker 的解耦。

Laravel 中的 Artisan 命令就使用了命令模式。