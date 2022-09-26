#### decltype类型提示符
- 希望通过表达式推断出要定义的变量类型，但是不想用该表达式的初始值
- 选择并返回操作数的类型，在此过程中，编译器分析表达式并得到它的类型，却不实际计算表达式的值
```c++
decltype(f()) sum = x;    //sum的类型就是函数f的返回类型
//编译器并不实际调用函数f,而是使用当调用发生时f的返回值类型作为sum类的类型。
```
- 如果decltype使用的表达式是一个变量，则decltype返回该变量的类型(包括顶层const和引用在内)
```c++
const int ci = 0; &cj = ci;

decltype(ci) x = 0;     //x的类型是const int
decltype(cj) y = x;     //y的类型是const int& , y绑定到变量x
decltype(cj) z;         //错误:z是一个引用，必须初始化
```

#### decltype和引用
- 如果decltype使用的表达式不是一个变量，则decltype返回表达式结果对应的类型
- decltype的结果可以是引用的类型
```c++
int i = 42; *p = &i, &r = i;
decltype(r + 0) b;    //正确：加法的结果是int,因此b是一个（为初始化）int
```

- 如果表达式的内容是解引用操作，则decltype将得到引用类型
```c++
int i = 42; *p = &i, &r = i;
decltype(*p) c;       //错误：c是int&，必须初始化
```

- decltype如果变量名加上一层或多层括号，编译器会把它当成是一个表达式
  - decltype((variable))  双层括号的结果永远是引用
  - decltype(variable)    单层括号只有当variable本身就是一个引用才是引用  
```c++
int i = 42; *p = &i, &r = i;
decltype((i)) d;       //错误：d是int&,必须初始化
decltype(i) e;          //正确：e是一个（未初始化的）int
```

- 赋值会产生引用的一类典型表达式，引用的类型就是左值的类型
    - 如果i是int,则表达式i = x的类型就是int&