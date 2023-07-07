# 1up Cup 2023
![](https://img.shields.io/badge/date-2023--07--07-0385B1.svg)

![](/final_standings.png?raw=true)

## Problems

### [1.Chocobo - Stripes](https://codeforces.com/problemset/problem/1742/C)

> #### 範例
> 由於 stdin 大多是一次輸入一列（橫的、row），整列只會塗成紅色，所以可以依序判斷輸入，整列字元都是 R 就輸出 R，又至少會塗一次，所以全部輸入完不是 R 就一定是 B。

---

### [2.Shiva - Long Long](https://codeforces.com/problemset/problem/1843/B)
> #### 範例
> 求最大陣列和，所以想辦法以最少次數將所有元素轉成正整數，依序判斷每個元素，連續元素值 <= 0 的範圍加一次次數，過程中可順便算總和，取每個元素絕對值加起來即可。

---

#### [3.Ifrit - Road To Zero](https://codeforces.com/problemset/problem/1342/A)
> #### 範例
> 花費兩次 a 可以執行與 b 相同的動作，所以如果兩次 a 比 b 還便宜，就把 b 當成兩次 a 的花費即可，先將 x 或 y 數字大的那邊花費 (大-小)\*a 讓比較大的數字變成跟另一個數字一樣，再花費剩餘數字\*b 兩數就會變成 0。

---

#### [4.Titan - Premutation](https://codeforces.com/problemset/problem/1790/C)
> #### 範例
> 輸入的資料可以推測出原始數列第一個元素值，只有一個子數列的第一個元素值跟其他不同，所以原始數列第一個元素值就是其他數列的第一個元素值，加上上面那個被刪除第一個元素值的子數列即是原始數列。

---

#### [5.Odin - Double Strings](https://codeforces.com/problemset/problem/1703/D)
> #### 範例
> 先建立所有輸入字串 map，再判斷每個字串拆成兩子字串的組合是否都在 map 中，是輸出 1，否輸出 0，golang 還要降低輸入次數才不會 TLE，所以將輸入一次全部讀入後再處理，注意要自己測試 codeforces 輸入的換行是否有 \r。

---

#### [6.Bahamut - Make Equal With Mod](https://codeforces.com/problemset/problem/1656/C)
> #### 範例
> 題目可選任意 >= 2 的數字取餘數，且可執行任意次數，最後元素值一定全部是 0 或 1，另外只要一開始輸入的元素值沒有 1，就一定可以讓所有元素值變為 0，而如果一開始有 1，只要有兩個值差 1 的元素，就沒辦法讓所有元素值變成 1，題目要求輸出是否可能而已，所以程式不用真的找 x 去計算，只要判斷有 1 且有兩個值差 1 的元素輸出 NO，反之輸出 YES 即可。
