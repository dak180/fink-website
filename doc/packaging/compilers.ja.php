<?
$title = "パッケージ作成 - コンパイラ";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2006/01/15 06:57:54';
$metatags = '<link rel="contents" href="index.php?phpLang=ja" title="パッケージ作成 Contents"><link rel="next" href="reference.php?phpLang=ja" title="リファレンスマニュアル"><link rel="prev" href="fslayout.php?phpLang=ja" title="ファイルシステムのレイアウト">';


include_once "header.ja.inc";
?>
<h1>パッケージ作成 - 5. コンパイラ</h1>




<p>
Fink は，Apple Developer Connection によってアップルコンピュータから提供される gcc コンパイラを使用しています．
バージョンはいくつかあり， Mac OS X システムでも通常は複数のバージョンが存在します．
</p>
<p>
<a href="http://www.mail-archive.com/fink-devel@lists.sourceforge.net/msg11877.html">より詳しい解説</a>がメーリングリスト中にあります．
</p>


<h2><a name="versions">5.1 コンパイラバージョン</a></h2>
<p>
GCC の発展に伴い，fink は "ディストリビューション" をつくって
変化に対応してきました．
</p>
<p>
各 Fink ディストリビューションには，ソースからコンパイルするユーザー全員がもっていると想定されている
既定の gcc と g++ コンパイラがあります．
パッケージ中で直接 "gcc" や "g++" を使用すると，この既定値が使われます． 
これと違う値を使用する必要がある場合，(例えば，ディストリビューションの移行中に) パッケージ .info ファイルは
Apple 提供の特定バージョンのバイナリを指定しなければなりません．
どのように指定するかは，ソフトウェアのビルドシステムによりますが，多くの場合
<code>SetCC</code> と <code>SetCXX</code> のフィールドを使用します．
例えば，g＋＋コンパイラのバージョンを 3.3 にするには，<code>SetCXX: g++-3.3</code> とします．
正しいコンパイラが使われているか，ビルド時の出力を確認してください．
</p>
<p>
10.1 ディストリビューションは，コンパイラに 2.95 の使用を前提とします．
10.2 ディストリビューションは，コンパイラに 3.1 の使用を前提とします．
10.2-gcc と 10.3 ディストリビューションは，コンパイラに 3.3 の使用を前提とします．
10.4-transitional ディストリビューションは複雑で，これは g++-3.3 と gcc-4.0 を使用しています．
10.4 ディストリビューションでは，gcc-4.0 と g++-4.0 を使用するようになる予定です．
</p>
<p>
正しい g++ コンパイラが使用されるよう新手法が 10.4-transitional ディストリビューションから採用されました．
コンパイル時に，<code>/sw/var/lib/fink/path-prefix-g++-XXX</code> (XXX はバージョン番号) 
ディレクトリが PATH に追加されます．
このディレクトリには正しい g++ が使われるようなシェルスクリプトが入っています．
</p>


<h2><a name="abi">5.2 g++ ABI</a></h2>
<p>
OS X の歴史の中で，g++ ABI は３度変わってきました: ABI は バージョン 2.95, 3.1, 3.3, 4.0 で異なります．
ABI の相違は互換性がなく，C++ コードを用いたライブラリにリンクする場合は，同じ ABI でコンパイルしなければなりません．
</p>
<p>
Fink では，g++ ABI は GCC フィールドで扱っています．
g++ あるいは c++ コンパイラを呼び出すパッケージは，GCC フィールドを定義しなければなりません
(逆に，呼び出さないパッケージには定義してはいけません)．
ABI が更新された場合，パッケージ依存性に GCC フィールドも確認しなければいけません．
依存するパッケージ全てがアップグレードされて，始めてそのパッケージもアップグレードすることができます．
ユーザーがパッケージをビルドするより前に正しく更新された依存性を持つためには，依存パッケージのバージョンを変える必要があります．
</p>
<p>
ある範囲内でのみ依存されているパッケージは，アップグレードの準備ができない場合，
ディストリビューション変更時に旧バージョンの ABI を使用することもできます．
アップグレードされる場合は，範囲内の全てのパッケージを同時に正しいバージョンにアップグレードする必要があります．
このため，ほとんどのパッケージにとって，アップグレードはディストリビューションの変更時にするのがよいでしょう．
</p>
<p>
Fink は GCC フィールドを使って，ユーザーが正しいコンパイラを使うよう確認します．
GCC フィールドがパッケージによって定義されている場合，fink は <code>gcc_select</code> 
コマンドが正しい値に設定されているかを確認します．
(10.2 と 10.3 での正しい値は　3.3 で，
10.4 での正しい値は　4.0 です．
OS X 10.2 以前には <code>gcc_select</code> はありません．)
</p>



<p align="right"><? echo FINK_NEXT ; ?>:
<a href="reference.php?phpLang=ja">6. リファレンスマニュアル</a></p>
<? include_once "../../footer.inc"; ?>


