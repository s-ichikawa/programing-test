package main

func main() {
    n := 4
    batch(n)
}

func batch(n int)  {
    print(n)

    if n < 1 {
        return
    } else {
        batch(n - 1)
    }

    print(n)
}
