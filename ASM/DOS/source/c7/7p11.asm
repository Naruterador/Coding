;编程，将datasg段中每个单词的前4个字母改为大写字母
assume cs:codesg,ss:stacksg,ds:datasg
stacksg segment
 dw 0,0,0,0,0,0,0,0
stacksg ends

datasg segment
    db '1. display      '
    db '2. brows        '
    db '3. replace      '
    db '1. modify       '
datasg ends

codesg segment
 start:
codesg ends
end start

