package main

import (
  "fmt"
  "strings"
  "net/http"
  "io"
)

func main() {

  url := "http://127.0.0.1/api/v1/agents/6062501eaef211ef95180242ac120003/completions"
  method := "POST"

  payload := strings.NewReader(`
     {
          "question": "海淀区有哪些荣誉称号?",
          "stream": true
     }`)

  client := &http.Client {
  }
  req, err := http.NewRequest(method, url, payload)

  if err != nil {
    fmt.Println(err)
    return
  }
  req.Header.Add("Content-Type", "application/json")
  req.Header.Add("Authorization", "Bearer ragflow-hjNzA4ODI4YWM5MTExZWY5YzUyMDI0Mm")

  res, err := client.Do(req)
  if err != nil {
    fmt.Println(err)
    return
  }
  defer res.Body.Close()

  body, err := io.ReadAll(res.Body)
  if err != nil {
    fmt.Println(err)
    return
  }
  fmt.Println(string(body))
}