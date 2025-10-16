#!/bin/bash
set -e

echo "⏳ Waiting for database to be ready..."
until nc -z -v -w30 db 3306
do
  echo "❌ Database is unavailable - sleeping"
  sleep 5
done

echo "✅ Database is up! Starting Apache..."
exec "$@"
