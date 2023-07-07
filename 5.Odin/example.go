/**
 * Accepted
 * 358 ms	10800 KB
 * 2023-07-05
 */
package main

import (
	"fmt"
	"io"
	"os"
	"strconv"
	"strings"
)

func main() {
	input, _ := io.ReadAll(os.Stdin)
	lines := strings.Split(string(input), "\r\n")
	t, _ := strconv.Atoi(lines[0])
	curr := 1
	for ; t > 0; t-- {
		stringMap := map[string]bool{}
		n, _ := strconv.Atoi(lines[curr])
		curr++

		strs := make([]string, n)
		for i := 0; i < n; i++ {
			strs[i] = lines[curr]
			stringMap[strs[i]] = true
			curr++
		}

		for i := 0; i < n; i++ {
			output := 0
			for j := 1; j < len(strs[i]); j++ {
				prefix := strs[i][0:j]
				suffix := strs[i][j:]
				if stringMap[prefix] && stringMap[suffix] {
					output = 1
				}
			}

			fmt.Print(output)
		}

		fmt.Println()
	}
}
