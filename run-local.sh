#!/bin/bash
# Run the Infinity SoftHub site locally for manual testing.
# Usage:  bash run-local.sh      then open http://localhost:8000
cd "$(dirname "$0")"

if ! command -v php >/dev/null 2>&1; then
  echo "PHP is not installed. Install it with Homebrew:"
  echo "  brew install php"
  echo "(No Homebrew? First run: /bin/bash -c \"\$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)\")"
  exit 1
fi

PORT=${1:-8000}
# Makes every link/image point to localhost instead of the live domain
export INFINITY_SITE_URL="http://localhost:$PORT/"
export INFINITY_DEBUG=1

echo "Site running at http://localhost:$PORT   (press Ctrl+C to stop)"
( sleep 1; open "http://localhost:$PORT/" ) &
php -S "localhost:$PORT"
