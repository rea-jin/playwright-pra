#### playwright 練習用
docker compose up -d --build

#### ファイル指定で実行
npx playwright test --headed tests/submit-test.spec.ts

### バージョン
npx playwright --version

### 録画でテスト生成
npx playwright codegen
できたものをコピぺ

###　npx playwright init がつかえない
これがつかえないとconfigふぁいるできない
testファイルに直接 headlessもーどのtrue/false書かないといけない
headlessはブラウザ起動しない