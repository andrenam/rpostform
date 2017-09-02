library(httr)

tab = read.csv(file="input.csv", head=TRUE, sep=",")

data <- list(
	var1=tab[3,1],
	var2=tab[3,2],
	var3=tab[3,3]
)
r <- POST(url="http://www.fussball-spielplan.de/formtest.php", body=data, encode="form")

r
