设 $n=p_1^{a_1}p_2^{a_2}\cdots$ 

数论函数
- $d(n)$ 为 $n$ 的因子个数，那么 $d(n)=(1+a_1)(1+a_2)\cdots$ 且 $d$ 是积性函数。
	- 对于 $p\in\mathbb{P}$ 显然有 $d(p)=2$ ，且 $d(p^k)=k+1$ 。对于两个数 $n\perp m$ 显然有 $d(nm)=d(n)d(m)$ 。
- L3.1.1 $d(n)$ 为奇数当且仅当 $n$是完全平方数
	- 条件成立时 $\forall i,a_i$ 为偶数，那么 $a_i+1$ 就是奇数，而奇数的积为奇数。否则存在至少一个偶数，那么乘积就是偶数。
- L3.1.2 $d(n)\leq 2\sqrt n$ 。
	- 典中典。我们知道因子可以两两配对，而每一对因子中一定有至少一个因子 $\leq \sqrt n$ ，所以因子总数一定小于等于 $2\sqrt n$ 。
- $\sigma(n)$ 为 $n$ 的因子和。$\forall p\in\mathbb{P},\sigma(p^k)=\frac{p^{k+1}-1}{p-1}$ 。这是个积性函数。
- $\varphi(n)$ 就是欧拉函数。
- Q3.3.1 对于 $m\perp n$ ，试证 $x\perp mn\iff (x\perp m,x\perp n)$ 。
	- 把数字想象成集合，当 $x\perp mn$ 时显然 $x$ 与 $m,n$ 都不相交，自然分别与他们互质。否则他们相交，自然也与其中至少一个数相交。
- $\varphi(n)$ 是积性函数。
	- 考虑 $n\perp m$ 。$\varphi(n)$ 代表与 $n$ 互质的数的个数，而 $\varphi(m)$ 同理。$\varphi(nm)$ 代表满足 $x\perp nm$ 的 $x$ 的个数，也就是满足 $x\perp n,x\perp m$ 的 $x$ 的个数。我们将 $1\sim mn$ 全部列成一个表，第 $i$ 行第 $j$ 个是 $(i-1)m+j$ ，那么显然每一行都是一个 $m$ 的剩余系，且每一列是 $n$ 的一个剩余系。有 $\varphi(m)$ 列满足所有元素都与 $m$ 互质，这是因为所有数字对 $m$ 取模后每一列数字一样。这样筛选出 $\varphi(m)$ 列，每一列是模 $n$ 的剩余系，就会有 $\varphi(n)$ 个元素满足 $x\perp n$ ，所以 $\varphi(nm)=\varphi(n)\varphi(m)$ 。可以用 $m=4,n=5$ 模拟一下。
- T3.3.1（高斯！）对于任意正整数 $n$ 我们有 $\sum_{d\mid n}\varphi(d)=n$ 。
	- $n\in\mathbb{P}$ 时显然满足条件，因为 $p=\varphi(p)+\varphi(1)=p-1+1$ 。
	- 当 $n=p^k$ 时就是 Telescoping Series 全抵消掉了，也满足条件。
	- 当 $n=p_1^{a_1}p_2^{a_2}$ 时，$\sum_{d\mid n}\varphi(d)=\sum_{d_1\mid p_1^{a_1}}\sum_{d_2\mid p_2^{a_2}}\varphi(d_1)\varphi(d_2)$ 显然就是 $=p_1^{a_1}p_2^{a_2}$ ，所以是积性的，任何合数都满足条件。 
---
- P3.3.1 证明对于合数 $n$ 有 $\varphi(n)\leq n-\sqrt{n}$ 。
	- 很数学的一个证明：
- Zeta 函数 $\zeta(s)=\sum^{\infty}\frac{1}{i^s}$ 收敛当且仅当 $s\gt 1$ 。
- Basel's Problem 说明 $\zeta(2)=\frac{\pi^2}{6}$ 。
- $(\frac{6}{\pi^2})n^2<\sigma(n)\varphi(n)<n^2$ 。

# 积性函数
- T3.4.1 函数 $f(n)$ 是积性函数时 $F(n)=\sum_{d\mid n}f(d)$ 也是积性函数。
	- $F(mn)=\sum_{d\mid mn}f(mn)=(\sum_{d\mid m}f(d))(\sum_{d\mid n}f(d))=F(m)F(n)$ 。
	- 显然 $1$ 和 $Id$ 都是完全积性函数，所以他们也是积性函数。$d=1*1$ 也是积性函数，而 $\sigma=Id*1$ 也是积性函数。
	- 
