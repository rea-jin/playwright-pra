#!/bin/bash

set -e

BRANCH="feature/auto-pr-branch"
MAIN_BRANCH="main"
PR_TITLE="自動生成コードのPR"
PR_BODY="Cursorによる自動PR作成です"

# 1. 新しいブランチを作って切り替え
git checkout -b $BRANCH

# 2. 変更をステージングしてコミット
git add .
git commit -m "自動更新: コード修正"

# 3. ブランチをpush
git push -u origin $BRANCH

# 4. PRを作成
PR_URL=$(gh pr create --title "$PR_TITLE" --body "$PR_BODY" --base $MAIN_BRANCH --head $BRANCH --repo <owner>/<repo> --json url -q .url)

echo "PR作成完了: $PR_URL"

# 5. PRにレビューコメントを投稿（例）
gh pr review $PR_URL --comment --body "コードは問題ありません。軽微な修正提案があります。"

# 6. 軽微な修正がある場合の例（必要に応じてCursorに指示を出すなど）

# 7. PRをマージ
gh pr merge $PR_URL --merge --delete-branch

echo "PRをマージしました。"
