- P2.4.5 证明对于任意整数 $n$ 有 $a-b\mid a^n-b^n$ 
	- 因为 $a\equiv b\pmod{a-b}$ 所以 $a^n-b^n\equiv a^n-a^n\equiv 0\pmod {a-b}$ 所以 $a-b\mid a^n-b^n$ 。
- P2.4.6 证明当 $p$ 是奇素数且 $a\perp b$ 时 $\gcd(\frac{a^p+b^p}{a+b},a+b)\in\{1,p\}$ 。
	- 注意到 $a\equiv-b\pmod p$ 所以 $a^{p-1}-a^{p-2}b+a^{p-3}b^2-\cdots+b^{p-1}$ 模 $p$ 时的等价于 $pa^{p-1}$ 。那么 $\gcd(\frac{a^p+b^p}{a+b},a+b)=\gcd(pa^{p-1},a+b)$ 。然后就是发现 $a+b\perp a^{p-1}$ 所以式子变成 $\gcd(p,a+b)$ ，结果显然。
- P2.4.7 假设 $f$ 是一个整系数多项式，试证 $a-b\mid f(a)-f(b)$ 。
	- 假设 $f(x)=\sum_{i=0}^n a_ix^i$ 那么 $f(x)-f(y)=\sum_{i=0}^n a_i(x^i-y^i)$ 。注意到对于任意 $m$ 都有 $x-y\mid x^m-y^m$ ，这是刚刚证出来的结论，所以就会对于任意 $i$ 都有 $x-y$ 整除 $a_i(x^i-y^i)$ 。综上 $x-y\mid f(x)-f(y)$ 。
	- 这题的结论是多项式带入的值的差整除他们结果的差，也就是 $d\mid f(a+d)-f(a)$ 或者 $f(a+d)\equiv f(a)\pmod d$ 。==这说明模下函数的值可以取模。==
- P2.4.8 $k\perp n\iff (ka\equiv kb\pmod n\implies a\equiv b\pmod n)$ 。
	- 当 $k\perp n$ 时 $n\mid k(a-b)$ 等价于 $n\mid a-b$ 。
	- 当 $k\not\perp n$ 时 $ka\equiv kb\pmod n\not\implies a\equiv b\pmod n$ ，举例 $k=2,a=1,b=5,n=8$ 就满足后者，但是 $k=2,a=1,b=1,n=8$ 又不满后者，显然这两个都满足前者。
- E2.4.1 (Russia 2001) 求所有满足 $p+q=(p-q)^3$ 的质数 $p,q$ 。
	- 随便模几个东西，比如 $p,q,p+q,p-q$ 得到一堆东西，什么 $q^3+q\equiv 0\pmod p$ 等等。注意到 $8p^3\equiv 0\pmod {p+q}$ 代表 $p+q\mid 8p^3$ ，然而 如果 $\gcd(p+q,p)\not=1$ 的话 $\gcd(p+q,p)$ 就只能等于 $p$ ，但是这样就会有 $p\mid p+q$ ，也就是说 $p=q$ ，所以 $2p=0$ ，矛盾。所以 $p+q\perp p$ ，所以 $p+q\mid 8$ 。发现 $(p,q)=(3,5)$ 。

两个集合相等后第一时间应该想到他们和、平方和、立方和都相等，元素乘积什么的只要不在乎顺序就相等。

- T2.6.1 （费马小定理）设 $a$ 与某个质数 $p$ 互质，证明 $a^{p-1}\equiv 1\pmod p$。
	- 设 $S=\{1,2,\cdots,p-1\}$ ，那么 $aS=\{a,2a,\cdots,a(p-1)\}\equiv S\pmod p$ 。所以 $S$ 的乘积等于 $aS$ 的乘积，也就是 $\prod i\equiv a^{p-1}\prod i\pmod p$ 。由于 $\prod i$ 与 $p$ 互质所以 $a^{p-1}\equiv 1\pmod p$ 。
- T2.6.2 （费马小定理）设有任意整数 $a$ 与质数 $p$ ，他们不一定互质，证明 $a^p\equiv a\pmod p$ 。
	- 当 $a\perp p$ 时就是费马小定理，显然成立。否则 $a\not\perp p$ ，所以 $a=kp$ ，也就是 $(kp)^{p}\equiv 0\equiv kp\pmod p$ 显然也成立。
- T2.8.1 （威尔逊定理） $p\in\mathbb{P}\iff (p-1)!\equiv -1\pmod p$ 。
	- 因为 $x=y^{-1}\iff y=x^{-1}$ ，而 $x^2\equiv 1\pmod p$ 的数仅仅是 $1,p-1$ 两个数，所以其他数可以和逆元两两配对变成一。最后再乘以 $1,-1$ 就得到 $(p-1)!\equiv -1\pmod p$ 。这是充分性。
	- 当 $p\not\in\mathbb{P}$ 时，如果 $p$ 有至少两个不同的除开 $1$ 和其本身的因子，那么 $(p-1)!\equiv 0\pmod p$ 。否则 $p$ 只有一个真因子。也就是 $p=q^2$，$q$ 是个质数。考虑 $q=2,3$ 时的情况，发现 $2$ 是特殊情况。从 $q=3$ 开始就一定有 $q^2\mid (p-1)!$ 因为这里面一定有至少两个 $q$ 。综合起来，
$$
(p-1)!\equiv\begin{cases}
-1&p\in\mathbb{P}\\
2&p=4\\
0 &\text{otherwise}
\end{cases}\pmod{p}$$

- P2.8.2 设 $p\in\mathbb{P}$ 求证 $(p-1)!\equiv p-1\pmod{p(p-1)}$ 。
	- 显然 $(p-1)!\equiv p-1\pmod p$ 且 $(p-1)!\equiv p-1\pmod{p-1}$ 。由于 $p\perp p-1$ 所以 $(p-1)!\equiv p(p-1)\pmod {p(p-1)}$ 。
	- 这个合并应该是 exCRT 的结论，直到 $x$ 的特解之后，就可以合并两个方程，模数就是两个模数的最小公倍数。
	- 另一种理解是 $p\perp p-1$ ，然后他们都整除 $(p-1)!-(p-1)$ ，所以 $p(p-1)\mid(p-1)!-(p-1)$ ，所以 $(p-1)!\equiv p-1\pmod{p(p-1)}$ 。中国剩余定理的合并貌似也可以用这种方法简短解释。
- P2.8.3 设 $n$ 是一个正整数，求 $\gcd(n!+1,(n+1)!)$
	- $(n+1)!$ 对 $n!+1$ 取模，原式等价于 $\gcd(n+1,n!+1)$ 。再用 $n!+1$ 对 $n+1$ 取模，这里用扩展威尔逊，直接得到当 $n+1$ 为质数时 $\gcd(n!+1,(n+1)!)=n+1$ 否则 $\gcd(n!+1,(n+1)!)=1$ 。
	- ==看到 $n!$ 和 $n+1$ 就应该想到威尔逊定理！==
# 欧拉函数
- L2.10.1 欧拉函数是积性函数。
	- 考虑 $\varphi(mn)$ ，其中 $m\perp n$ 。显然一个数 $x$ 满足 $x\perp mn$ 时一定有 $x\perp m$ 且 $x\perp n$ 。当 $x\leq n$ 与 $n$ 互质时，不管给他乘以 $m$ 的几次方他都还是和  $n$ 互质。所以选法就是先选一个与 $n$ 互质的数
- T2.10.2（欧拉定理）设整数 $n\geq 2$ 且整数 $a\perp n$，那么 $a^{\varphi(n)}\equiv 1\pmod n$ 。 
	- 就是一个与模数互质的数逆元也一定与模数互质，所以与模数互质的所有数相乘能两两配对得到 $1$ 。
- P2.10.4 试证整数 $n$ 为奇数时 $n\mid 2^{n!}-1$ 。
	- 显然 $1\leq\varphi(n)\lt n$ ，所以 $2^{n!}$ 显然可以写成 $2^{\frac{n!}{\varphi(n)}\varphi(n)}$ 。根据欧拉定理，当 $2$ 与 $n$ 互质的时候 $2^{\varphi(n)}\equiv1$ ，也就是 $n$ 为奇数时 $2^{n!}\equiv 1$ ，那么 $2^{n!}-1\equiv 0$ 。

# 例题
- E2.12.1当 $a^m\equiv 1\pmod d$ 且 $a^n\equiv 1\pmod d$ 时， $a^{\gcd(m,n)}\equiv 1\pmod d$ 。
	- 注意到 $a^{m-n}\equiv 1$ 之后辗转相除法。或者使用裴蜀定理也是一样的。
	- 可以用上面这个证明（E1.10.4） $\gcd(a^m-1,a^n-1)=a^{\gcd(m,n)}-1=d$ 。试证 $a^{gcd(a^m-1,a^n-1)}-1\mid d$ 且 $d\mid a^{gcd(a^m-1,a^n-1)}-1$ 就行了。前者是因为 $a^{gcd(a^m-1,a^n-1)}-1$ 同时整除 $a^m-1,a^n-1$ ，后者是因为上面的结论。
- 剩余系用 $\mathbb{Z}/p\mathbb{Z}$ 或是 $\mathbb{F}_p$ 表示，后者的 $p$ 必须是质数。 $\mathbb{F}_p$ 中的函数 $\sigma(t)=t^p$ 叫做 `Frobenius Endomorphism`。（E2.12.3）Freshman's Dream （$(a+b)^p\equiv a^p+b^p\pmod p$） 证明了 $\sigma(a+b)=\sigma(a)+\sigma(b)$ ，也就是他在 $\mathbb{F}_p$ 上是完全加性函数。
- E2.12.4 设 $p\in\mathbb{P}$ ，试证 $\forall x\in\mathbb{Z}$  有 $x^p-x\equiv x(x-1)(x-2)\cdots(x-(p-1))\pmod p$ 。
	- 显然左边根据费马小定理的第二形式是 $0$ ，右边总有一个模 $p$ 余下 $0$ ，所以右边也是 $0$ 。证毕。
- E2.12.5（Wolstenholme's Theorem）
# 练习

# 二项式系数
当

---

威尔逊定理的冗余错证
- 那么 $q^2\mid (x-1)(x+1)$ 。有三种情况，其中两种对应 $x=1,x=q^2-1$ 。还有一种是 $q\mid x-1$ 且 $q\mid x+1$ 。那么 $x-1=k_1q$ 且 $x+1=k_2q$ ，也就是 $k_1q+1=k_2q-1\iff 2=q(k_2-k_1)$ 所以 $q=2,k_2=k_1+1$ 。当 $p=4$ 时，$(p-1)!\equiv 2\pmod p$ 。其他情况下，$p=q^2$ 且 $q$ 是一个大于 $2$ 的质数，所以 $p$ 是一个奇数，除去 $1,q,q^2$ 这三个数，剩下奇数个与 $p$ 互质的数，他们两两配对乘积为 $1$ ，再乘上这三个就行了，也就是 $(p-1)!\equiv -\sqrt{p}\pmod p$ 。这是必要性，当 $p\not\in\mathbb{P}$ 时 $(p-1)!\not\equiv -1\pmod p$ 。