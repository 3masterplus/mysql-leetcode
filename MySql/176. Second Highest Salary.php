
Q：编写一个SQL获取下表中数据第二高的,如果没有第二高则返回NULL

TABLE NAME：Employee

+----+--------+
| Id | Salary |
+----+--------+
| 1  | 100    |
| 2  | 200    |
| 3  | 300    |
+----+--------+

A：SELECT MAX(Salary) as SecondHighestSalary FROM Employee WHERE Salary < (SELECT MAX(Salary) FROM Employee);

详解：使用MAX()函数,如果值不存在则会返回NULL.