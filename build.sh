#!/bin/sh

#如果www文件夹不存在，创建文件夹
if [ ! -d "www" ]; then
  mkdir www
fi

cd www/
rm -rf *
cd ..

# 编译新文件
cd web
npm install
npm run build
cd dist
cp -r * ../../www/

cd ..