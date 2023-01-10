;编程，将datasg段中每个单词改为大写字母
assume cs:codesg,ds:datasg

datasg segment
    db 'ibm             '
    db 'dec             '
    db 'dos             '
    db 'vax             '
datasg ends

codesg segment

start:







    mov ax,4c00h
    int 21h


codesg ends
end start

