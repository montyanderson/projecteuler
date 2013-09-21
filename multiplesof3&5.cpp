// project euler.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"

#include <iostream>

using namespace std;

int main() {
	cout << "Hello world!";
	int z = 1;
	int total = 0;
	for (z = 1; z < 1000; z++) {
		if (z % 3 == 0 || z % 5 == 0) {
			total += z;
		}
	}
	cout << total;
	cin.get();
	return 0;
}

