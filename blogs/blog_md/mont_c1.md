# Divisibility

- P1.4.1 Find all positive integers n for which 3n − 4, 4n − 5, and 5n − 3 are all prime numbers.
	- 从奇偶性出发，将所有式子模 $2$ 。变化后的式子分别是 $n,1,n-1$ 也就是说当 $n\geq 4$ 时总有一个数能被 $2$ 整除。枚举 $n=1,2,3$ 的情况发现当且仅当 $n=2$ 时满足题目条件。
- P1.4.2 If p < q are two consecutive odd prime numbers, show that p + q has atleast 3 prime factors (not necessarily distinct).
	- 显然可以提出 $2$ 。然后 $p\lt \frac{p+q}2\lt q$ 所以 $\frac{p+q}2$ 不是质数（$p,q$ 是连续的质数，中间不可能有其他质数）所以 $p+q=2*x*y$ 。
- Theorem 1.6.1 (Euclid) 证明素数有无限多个。
	- 假设素数有有限多个，他们分别是 $p_1,p_2,\cdots,p_k$ ，那么考虑 $n=p_1p_2\cdots p_k+1$ ，这个数显然无法被任意一个质数整除，所以他也是质数。但是这个质数不属于 $p_i$ 的任意一个，矛盾。
- 证明 $\gcd(a+kb,b)=\gcd(a,b)$ 。
	- 设 $d=\gcd(a,b)$ 且 $a=pd,b=qd$ 显然 $p\perp q$ 且 $\gcd(a+kb,b)=\gcd(pd+kqd,qd)=d\gcd(p+kq,q)$ 。假设 $\gcd(p+kq,q)=y\gt 1$ 那就会有 $y\mid p+kq$ 和 $y\mid q$ 。前者变成 $y\mid p$ 。也就是说 $p\not\perp q$ 。这里矛盾，所以 $y=1$ 。所以 $\gcd(a+kb,b)=d\gcd(p+kq,q)=d=\gcd(a,b)$ 。
- PUTNAM 2000 证明 $\forall n\geq m\geq 1,\frac{\gcd(n,m)}{n}C_n^m\in\mathbb{Z}$。
	- 发现 $C_n^m=C_{n-1}^{m-1}\cdot\frac{m}{n}$ ，然后发现 $\gcd(n,m)$ 是个整数，但是很难吸收掉多出来的 $m$。 
	- 用裴蜀定理展开 $(n,m)$ ，原命题变为 $\frac{mx+ny}{n}C_n^m\in\mathbb{Z}$ 。显然 $\frac{ny}{n}C_n^m\in\mathbb{Z}$ ，右边的 $x\in\mathbb{Z}$ 而 $\frac{m}n$ 又可以被吸收掉，证毕。
- P1.9.4 $x$ 在 $k$ 进制下有 $\left\lfloor\log_kx\right\rfloor+1$ 位。
	- $x$ 有 $d$ 位相当于 $k^d\gt x\geq k^{d-1}$ 也就是 $d\gt\log_kx\geq d-1$ 。所以 $d+1\gt1+\log_kx\geq d$ 由此可得 $d=1+\lfloor\log_kx\rfloor$ 。
	- 假设 $x=a_kb^k+\cdots$ ，那么 $b^k\leq x\lt b^{k+1}$ ，所以 $k\leq \log_b x\lt k+1$ ，所以 $k=\lfloor\log_b x\rfloor$ 。由于 $k$ 是最高次幂，所以实际有 $k+1$ 位。
- 素数密度 $\pi(n)\sim \frac{n}{\log n}$ 。
# 手动扩欧
找到 $440x+124y=(440,124)$ 的一组特解 $(x^*,y^*)$ 。先做辗转相除法：$$
\begin{aligned}
440&=124*3+68\\
124&=68*1+56\\
68&=56*1+12\\
56&=12*4+8
\end{aligned}$$
这里显然 $12(1)+8(-1)=4$ 。把 $8$ 带回更高的数，$56=12*4+8$ 所以 $8=56-12*4$ 。$12(1)+(56-12*4)(-1)=4$ 展开即可。得到 $56(-1)+12(5)=4$ 。一直往回带就可以了。这貌似也是裴蜀定理的证明方法之一。
## 裴蜀定理
（裴蜀定理）对于整数 $a,b,n$  有 $\exists (x,y),ax+by=n\iff(a,b)\mid n$ 。

后者对前者的必要性显然，尝试证明后者对前者的充分性。证明 $\exists (x,y),ax+by=d$ 与证明原题是等价的，总体乘以 $\frac{n}{d}$ 就是原方程的一个解。因为 $d=\gcd(a,b)\mid n$ ，我们可以做辗转相除法。 
$$\begin{aligned}
a&=bk_1+r_1\\
b&=r_1k_2+r_2\\
r_1&=r_2k_3+r_3\\
r_2&=r_3k_4+r_4\\
\cdots\\
r_{n-4}&=r_{n-3}k_{n-2}+r_{n-2}\\
r_{n-3}&=r_{n-2}k_{n-1}+r_{n-1}\\
r_{n-2}&=r_{n-1}k_n\\
\end{aligned}$$
这个时候 $r_n=0$ 而 $r_{n-1}$ 就是 $d$ 。倒数第二条式子是 
$r_{n-3}=r_{n-2}k_{n-1}+d$ 也就是 $r_{n-3}-r_{n-2}k_{n-1}=d$ 。将倒数第三条式子 $r_{n-4}-r_{n-3}k_{n-2}=r_{n-2}$ 往回带得到 $r_{n-3}-(r_{n-4}-r_{n-3}k_{n-2})k_{n-1}=d$ 也就是 $-r_{n-4}k_{n-1}+r_{n-3}(1+k_{n-2}k_{n-1})=d$ 。我们可以一直往回带，显然这样就能构造出一个 $ax+by=d$ 的特解 $(x^*,y^*)$ 。所以充分性也显然。

这么做的动机是我们要求 $a,b$ 的 $\gcd$ ，也就是 $d$ ，所以我们做了一次辗转相除法。然后我们发现辗转相除法的过程实际上就是在找 $x,y$ 使得 $ax+by=d$ 。

# 章后练习
- E1.10.1 证明 $\forall p\in\mathbb{P},\sqrt{p}$ 无理。
	- 假设 $\sqrt{p}=\frac{n}m$ 那么 $n\perp m$ ，$m^2p=n^2$ ，所以 $p\mid n^2$ 。而 $n^2$ 不可能整除 $m^2$ 因为 $n\perp m$ 所以 $n^2\perp m^2$ 。所以 $n^2\mid p$ 。如果 $n=1$ 就会有 $m^2p=1$ ，但是 $p\geq 2$ 所以这不可能。所以 $n\gt 1$ 所以 $p$ 是合数，矛盾。故 $\sqrt{p}$ 是无理数。这里的 $n^2\mid p$ 貌似有点奇怪，但是也是合理的。
- E1.10.3 （Euclid's Divison Lemma）证明 $b=aq+r$ 的 $q,r$ 是唯一的，其中 $r$ 满足 $0\leq r\lt a$ 。
	- 跟费马小定理的证明过程有一部分很相似。就是假设 $b=aq_1+r_1=aq_2+r_2$ 然后发现 $a\mid r_2-r_1$ 但是 $0\leq r\lt a$ 所以 $r_2-r_1=0$ 所以 $r_2=r_1$ 那么 $q_1=q_2$ 。所以只要满足 $0\leq r\lt a$ 那么就是唯一的。 
- E1.10.4 证明 $\gcd(a^m-1,a^n-1)=a^{\gcd(m,n)}-1$ 。
	- 假设 $m\geq n$ 那么 $\gcd(a^m-1,a^n-1)=\gcd(a^m-1-a^n+1,a^n-1)=\gcd(a^n(a^{m-n}-1),a^n-1)$ 。由于 $a^n-1\perp a^n$ 所以刚才的式子等价于 $\gcd(a^{m-n}-1,a^n-1)$ 。然后发现这跟辗转相除法的过程可以等价，最后会是 $a^{\gcd(m,n)}-1$ 。  
- P1.10.1 设 $a,b,c,d\in\mathbb{Z}$ 满足 $ab=cd$ ，求证 $a+b+c+d\not\in\mathbb{P}$ 。
	- Four Number Lemma 就是说 $ab=cd$ 时 $\frac{a}c=\frac{d}b=\frac{r}s$ 满足 $r\perp s$ ，所以 $a=pr,c=ps,d=tr,b=ts$ 可以这样表示。
	- 那么 $a+b+c+d=(p+t)(r+s)$ ，而由于 $p,r,t,s\geq 1$ 所以前者是个合数。
# 例题
- E1.11.2 Show that for $a\perp b$ and $p\in\mathbb{P}$ , $\gcd(\frac{a^p+b^p}{a+b},a+b)\in\{1,p\}$ .
	- 做带余除法，原式等价于 $\gcd(pb^{p-2},a+b)$ 。而 $b^{p-2}\perp a+b$ 所以原式等价于 $\gcd(p,a+b)$ 。显然命题成立。
- E1.11.3（Iran 2005）证明对于正整数 $n,p\gt 1$ ，当 $n\mid p-1$ 且 $p\mid n^3-1$ 时， $4p-3$ 是个完全平方数。
	- 设 $p=nx+1$ 。显然 $p\mid n^2+n+1$ ，所以 $p\mid n^2x+nx+x-n^2x-n=nx-n+x$ ，进而 $p\mid nx-n+x-nx-1=-n+x-1$ 。如果 $-n+x-1\not=0$ ，那么 $|n-x+1|\geq p\geq n+1$ 。这个 $p\geq n+1$ 是由 $n\mid p-1$ 得出的。假设绝对值不变号，那么 $x\leq 0$ ，这与 $p=nx+1\geq 2$ 矛盾。假设绝对值变号，那么 $x\geq 2(n+1)$ ，带入 $p=nx+1$ ，得到 $p\geq n(2n+1)+1$ 。我们知道 $p\mid n^2+n+1$ ，而 $n\geq 2$ ，所以矛盾。所以 $-n+x-1\not=0$ 不成立，所以 $x=n+1$ 。推出 $p=n^2+n+1$ ，带入得到 $4p-3=(2n+1)^2$ ，证毕。

# Special Factorization Trick
若一个整系数多项式 $F=\sum\limits_{0\leq i\leq p-1} x^{a_i}$ 对于 $p\in\mathbb{P}$ 满足 $a_i$ 模 $p$ 形成一个完整的剩余系，那么 $\sum_{0\leq i\leq p-1}x^i\mid F$ 。