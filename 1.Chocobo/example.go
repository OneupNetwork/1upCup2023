/**
 * Accepted
 * 873 ms	2000 K
 * 2023-07-04
 */
package main

import (
	"fmt"
)

func main() {
	var t int
	fmt.Scanln(&t)
	for ; t > 0; t-- {
		var line string

		fmt.Scanln()

		red := false
		for i := 0; i < 8; i++ {
			fmt.Scanln(&line)
			if line == "RRRRRRRR" {
				red = true
			}
		}

		if red {
			fmt.Println("R")
		} else {
			fmt.Println("B")
		}

	}
}
