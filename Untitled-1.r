

plot(3,8, xlim=c(0,14), ylim=c(0,12), xlab="Eje x", ylab="Eje y", lwd=3, col="blue", bty="n")
axis(side = 1, 0:14)
axis(side = 2, 0:12)
arrows(0,0,3,8,col="blue")
abline(h = pretty(0:12, 12), v = pretty(0:14, 14), col = "lightgray")


points(10,2,lwd=3,col="green")
arrows(0,0,10,2,col="green")

points(13,10,lwd=3,col="black")
arrows(0,0,13,10,col="black")

arrows(3,8,13,10,col="blue",lty=3)
arrows(10,2,13,10,col="green",lty=3)