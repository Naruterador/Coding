#Grid布局管理器
> 很多时候Tkinter界面编程都会优先考虑使用Pack布局，但实际上Tkinter后来引入的Grid布局不仅简单易用，而且管理
  组件也非常方便。<br>

> Grid把组件空间分解成一个网格进行维护，即按照行、列的方式排列组件，组件位置由其所在的行号和列号决定:行号
  相同而列号不同的几个组件会被依次排列，列号相同而行号不同的几个组件会被依次左右排列。

> 可见，在很多场景下Grid是最好用的布局方式。相比之下，Pack布局在控制细节方面反而显得有些力不从心。

> 使用Grid布局的过程就是为各个组件指定行号和列号的过程，不需要为每个网格都指定大小，Grid布局会自动为它们
  设置合适的大小。

> 程序调用组件的grid()方法就进行Grid布局，在调用grid()方法时可传入多个选项，该方法支持的ipadx、ipady
  padx、pady与pack()方法的这些选项相同。而grid()方法额外增加了如下选项。
<pre>
    > cloumn:指定将组件放入哪一列
    > columnspan:指定组件横跨多少列
    > row: 指定组件放入哪行。第一行的索引为0
    > rowspan:指定组件横跨多少行
    > sticky:选项支持N(北，代表上)、E(东，代表右)、S(南，代表下)、W(西，代表左)、NW(
             西北，代表左上)、NE(东北，代表右上)、SW(西南，代表左下)、SE(东南，代表右下)、CENTER(
             中，默认值)这些值。
</pre>
