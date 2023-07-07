/**
 * Accepted
 * 15 ms	0 KB
 * 2023-07-04
 */
package main

import (
	"fmt"
)

func main() {
	var t, a, b, x, y int
	fmt.Scanln(&t)
	for ; t > 0; t-- {
		fmt.Scanf("%d %d\n", &x, &y)
		fmt.Scanf("%d %d\n", &a, &b)

		if a+a < b {
			b = a + a
		}

		if x < y {
			x, y = y, x
		}

		fmt.Println((x-y)*a + y*b)
	}
}
