# Laravel環境で取り入れているテストTips4選

--- 

## 自己紹介

- 株式会社SCOUTER CTO
- @kotamat

---

## SCOUTERとは

![会社紹介](assets/img/scouter-1.png)

---

## LaraVue勉強会

![LaraVue](assets/img/laravue.png)

- Laravel と Vue.jsの勉強会
- 次回は4月くらいに開催予定

---
## みなさんテストやってますか？

🙋

---  

![t_wada](https://connpass-tokyo.s3.amazonaws.com/event/27540/41d84cf0e6494e2e91e51ad8e9c85310.png)


---

## 今日話すこと

- 振る舞い系
    - APIspecテスト
    - ModelFactory
- ユニットテスト系
    - 全ペアテスト
    - Table Driven Test

--- 

## APIspecテスト

- Laravelに標準で搭載されているrest系関数を使ったテスト
- APIのIO全体の振る舞いをテストするのに簡単に使える

---

### 呼び出し方

---?code=tests/Feature/ApiTest.php&lang=php

@[12-14](GETパラメータを定義しておき)
@[16-17](routeの第二引数にパラメータを渡してレスポンス取得)
@[19](ステータス200かどうかチェック)
@[20](取得したデータをprint_rで表示)
@[28-30](POSTも同様に配列でパラメータを定義)
@[32-33](今度はpostJsonの第二引数にパラメータを渡す(getパラメータではないので))
@[35](ステータス200かどうかチェック)
@[36](取得したデータをprint_rで表示)
@[42](PUTの場合は)
@[44-49](送信データとGETパラメータを双方定義し)
@[52](routeの第二引数と、putJsonの第二引数それぞれに渡してあげて)
@[35](ステータス200かどうかチェック)
@[36](取得したデータをprint_rで表示)
@[61-71](deleteも同様)

--- 

### 実行結果

```
Array
(
    [status] => huga
)
Array
(
    [name] => hoge
)
Array
(
    [id] => 1
    [name] => hoge
)
Array
(
    [id] => 1
)
```

--- 

### 応用

- これを用いることで、API定義書を自動生成することが可能となる。
- 色々なプロジェクトで使用できるようにAPI定義書自動生成ツールを作成した。

--- 

## ModelFactory

---


## 全ペアテスト

--- 

## Table Driven Test
