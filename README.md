# 課題最終提出
## 今後のスケジュール
<https://docs.google.com/spreadsheets/d/1gOi3P6H23bkDxsYF5FbrXvHCh5ALKfrpZDEiSwFTPqs/edit?usp=sharing>

## 企画書
<https://docs.google.com/presentation/d/1hm6ZvZPGhHqBe6qb82TybLPMCfjPKQ0DhecihLG7Nfc/edit?usp=sharing>

## 概要（どんなものか，どうやって使うか，など）
#### 集計&結合の実装<br>
#### ARアプリを使用し遠くにあるものを探すアプリケーション用DB<br>
#### ログイン機能・チェック機能の追加<br>

## 苦戦した点，もう少し実装したかった点
#### これから現在地・目的地・経由地等の必要要素を加えていきます<br>
#### ログイン機能によるID振り分け・確認済みチェック機能の追加等<br>

## 感想など（任意）
#### まずは9地点の情報と使用した共有具を設定し9項目のパラーメーターを条件によって変更する機能を追加する、その変更されたキーに紐づけた矢印マークをARアプリを使用した際に表示させるアプリ作成が最初の目標。<br>

## やりたいこと
#### 共有具が位置する場所への案内アプリ

①探している共有具を選択<br>
②今いる位置から最も近いARマーカーを読取る<br>
③工場名・使用設備・使用者の情報と共に方角を表示<br>
④迷う都度ARマーカーを読取り指示された方角へ歩く<br>
⑤共有具使用時に工場名・使用設備・使用者を入力<br>
<br>
処理内容<br>
工場・生産設備・人・共有具・位置の情報をDB化<br>
ユーザーは共有具使用時に生産設備・人・共有具の入力<br>
ユーザーの共有具使用時の情報入力日時を記録<br>
工場を細かく区分けし要所にARマーカーを設置<br>
最新日時の工場・生産設備の2情報から方角の設定<br>
ARマーカーを読取ることで視覚的に矢印で示す<br>
<br>

入力項目<br>
使用者⇒ID<br>
工場名⇒場所1<br>
仕様エリア⇒場所2<br>
使用設備⇒事前登録プルダウン<br>
日時⇒DATETIME<br>
<br>
表示内容（仮）<br>
A～の９マスの何処にあるか<br>
その方角の矢印を記載<br>