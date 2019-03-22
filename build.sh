#!/bin/sh

# 编译新文件
cd web
npm install
npm run build
cd ..

# 替换原文件
rm -rf www
mkdir www
cp -r web/dist/* www/