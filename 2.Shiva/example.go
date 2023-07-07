/**
 * Accepted
 * 61 ms	7800 KB
 * 2023-07-03
 */
package main

import (
	"bufio"
	"fmt"
	"math"
	"os"
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

	t, _ := strconv.Atoi(line)
	for i := 0; i < t; i++ {
		if scanner.Scan() {
			line = scanner.Text()
		}

		n, _ := strconv.Atoi(line)

		if scanner.Scan() {
			line = scanner.Text()
		}

		strList := strings.Split(line, " ")

		var num, sum, times int64
		sum = 0
		times = 0
		flag := false
		for i := 0; i < n; i++ {
			num, _ = strconv.ParseInt(strList[i], 10, 64)
			if num < 0 && !flag {
				flag = true
				times++
			} else if num > 0 && flag {
				flag = false
			}

			sum += int64(math.Abs(float64(num)))
		}

		fmt.Printf("%d %d\n", sum, times)
	}
}
