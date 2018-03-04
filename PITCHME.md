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

@[14-16](GETパラメータを定義しておき)
@[18-19](routeの第二引数にパラメータを渡してレスポンス取得)
@[21](ステータス200かどうかチェック)
@[22](取得したデータをprint_rで表示)
@[30-32](POSTも同様に配列でパラメータを定義)
@[34-35](今度はpostJsonの第二引数にパラメータを渡す(getパラメータではないので))
@[37](ステータス200かどうかチェック)
@[38](取得したデータをprint_rで表示)
@[44](PUTの場合は)
@[46-51](送信データとGETパラメータを双方定義し)
@[54](routeの第二引数と、putJsonの第二引数それぞれに渡してあげて)
@[37](ステータス200かどうかチェック)
@[38](取得したデータをprint_rで表示)
@[63-74](deleteも同様)

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

@[1-4](GET)
@[5-8](POST)
@[9-13](PUT)
@[14-17](DELETE)

--- 

### 応用

- これを用いることで、API定義書を自動生成することが可能となる。
- 色々なプロジェクトで使用できるようにAPI定義書自動生成ツールを作成した。
- [kotamat/laravel-apispec-generator](https://github.com/kotamat/laravel-apispec-generator)

--- 

#### 使い方

---

#### インストール

```bash
composer require --dev kotamat/laravel-apispec-generator
```

---?code=composer.json&lang=php

@[17](composer requireでkotamat/laravel-apispec-generatorをインストール)

---

#### TestCaseを拡張

---?code=tests/ApiSpecTestCase.php&lang=php

@[5-7](ベースとなるTestCaseクラスにて、ApiSpecTestCaseをextendするように修正)

---

#### テストを書く

---?code=tests/Feature/ApiWithSpecTest.php&lang=php

@[9](実際のクラスでは$isExportSpec=trueにしたあと)
@[13-23](先程と同様にテストを記述)
@[28-38](先程と同様にテストを記述)
@[43-56](先程と同様にテストを記述)
@[61-71](先程と同様にテストを記述)

---

#### storage/appディレクトリに出力

---?code=storage/app/api/test?page=1/GET.http&lang=http

@[1](実際のリクエスト)
@[2-3](各種ヘッダー)
@[5-8](返り値JSON)

## ModelFactory

---


## 全ペアテスト

--- 

## Table Driven Test
