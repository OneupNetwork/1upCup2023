/**
 * Accepted
 * 46 ms	9400 KB
 * 2023-07-04
 */
package main

import (
	"bufio"
	"fmt"
	"os"
	"sort"
	"strconv"
	"strings"
)

func main() {
	scanner := bufio.NewScanner(os.Stdin)
	buf := make([]byte, 0, 12*200000)
	scanner.Buffer(buf, 12*200000)

	var line string
	if scanner.Scan() {
		line = scanner.Text()
	}

	for t, _ := strconv.Atoi(line); t > 0; t-- {
		if scanner.Scan() {
			line = scanner.Text()
		}

		n, _ := strconv.Atoi(line)

		if scanner.Scan() {
			line = scanner.Text()
		}

		strList := strings.Split(line, " ")
		list := make([]int64, n)

		for i := 0; i < n; i++ {
			list[i], _ = strconv.ParseInt(strList[i], 10, 64)
		}

		sort.Slice(list, func(i, j int) bool {
			return list[i] < list[j]
		})

		one := false
		diffOne := false
		for i := 0; i < n; i++ {
			if list[i] == 1 {
				one = true
			}

			if i < n-1 && list[i]+1 == list[i+1] {
				diffOne = true
			}
		}

		if one && diffOne {
			fmt.Println("NO")
		} else {
			fmt.Println("YES")
		}
	}
}
