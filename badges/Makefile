OS := $(shell uname -s)
ifeq ($(OS),Darwin)
	OPEN := open
else
	OPEN := xdg-open
endif

sensors.pdf: badges.tex
	latexmk -pdf badges.tex
	$(OPEN) badges.pdf

clean:
	rm *.aux
	rm *.fdb_latexmk
	rm *.fls
	rm *.log

clobber:
	rm badges.pdf
