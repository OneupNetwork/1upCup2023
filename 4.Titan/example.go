/**
 * Accepted
 * 62 ms	4600 KB
 * 2023-07-05
 */
package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {
	scanner := bufio.NewScanner(os.Stdin)

	var line string
	if scanner.Scan() {
		line = scanner.Text()
	}

	t, _ := strconv.Atoi(line)
	for ; t > 0; t-- {
		if scanner.Scan() {
			line = scanner.Text()
		}

		n, _ := strconv.Atoi(line)
		sequences := make([][]int, n)
		counter := map[int]int{}
		for i := 0; i < n; i++ {
			if scanner.Scan() {
				line = scanner.Text()
			}

			strList := strings.Split(line, " ")

			sequences[i] = make([]int, len(strList))
			for j := 0; j < len(strList); j++ {
				sequences[i][j], _ = strconv.Atoi(strList[j])
			}

			counter[sequences[i][0]]++
		}

		var first, othersKey int
		for i := 0; i < n; i++ {
			if counter[sequences[i][0]] == 1 {
				othersKey = i
			} else {
				first = sequences[i][0]
			}
		}

		output := fmt.Sprint(first, " ", sequences[othersKey])
		output = strings.Replace(output, "[", "", -1)
		output = strings.Replace(output, "]", "", -1)

		fmt.Println(output)
	}
}
